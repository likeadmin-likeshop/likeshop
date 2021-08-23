package com.alipay.easysdk.factory;

import com.alipay.easysdk.TestAccount.Mini;
import com.alipay.easysdk.payment.common.Client;
import com.alipay.easysdk.payment.common.models.AlipayTradeRefundResponse;
import org.junit.Before;
import org.junit.Test;

import static org.hamcrest.CoreMatchers.is;
import static org.hamcrest.CoreMatchers.not;
import static org.hamcrest.CoreMatchers.nullValue;
import static org.hamcrest.MatcherAssert.assertThat;

public class FactoryTest {
    @Before
    public void setUp() {
        Factory.setOptions(Mini.CONFIG);
    }

    @Test
    public void testGetClient() throws Exception {
        AlipayTradeRefundResponse response = Factory.getClient(Client.class).refund(
                "64628156-f784-4572-9540-485b7c91b850", "0.01");

        assertThat(response.code, is("10000"));
        assertThat(response.msg, is("Success"));
        assertThat(response.subCode, is(nullValue()));
        assertThat(response.subMsg, is(nullValue()));
        assertThat(response.httpBody, not(nullValue()));
        assertThat(response.refundFee, is("0.01"));
    }
}